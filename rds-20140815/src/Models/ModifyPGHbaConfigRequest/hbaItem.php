<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ModifyPGHbaConfigRequest;

use AlibabaCloud\Tea\Model;

class hbaItem extends Model
{
    /**
     * @description The IP addresses from which the specified users can access the specified databases. If you set this parameter to 0.0.0.0/0, the specified users are allowed to access the specified databases from all IP addresses.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $address;

    /**
     * @description The name of the database. If you set this parameter to all, the specified users are allowed to access all databases on the instance.
     *
     * If you specify multiple entries, separate the entries with commas (,).
     * @example all
     *
     * @var string
     */
    public $database;

    /**
     * @description The mask of the IP address. If the value of the **Address** parameter is an IP address, you can use this parameter to specify the mask of the IP address.
     *
     * @example 0
     *
     * @var string
     */
    public $mask;

    /**
     * @description The authentication method. Valid values:
     *
     *   **trust**
     *   **reject**
     *   **scram-sha-256**
     *   **md5**
     *   **password**
     *   **gss**
     *   **sspi**
     *   **ldap**
     *   **radius**
     *   **cert**
     *   **pam**
     *
     * @example ldap
     *
     * @var string
     */
    public $method;

    /**
     * @description The options of the authentication method. In this topic, LDAP is used as an example. You must configure this parameter. For more information, see [Authentication Methods](https://www.postgresql.org/docs/11/auth-methods.html).
     *
     * @example ldapserver=The private IP address of the ECS instance ldapbasedn="CN=Users,DC=pgsqldomain,DC=net" ldapbinddn="CN=The username of the administrator user of the AD domain controller, CN=Users,DC=pgsqldomain,DC=net" ldapbindpasswd="The password of the administrator user of the AD domain controller" ldapsearchattribute="sAMAccountName"
     *
     * @var string
     */
    public $option;

    /**
     * @description The priority of the record. If you set this parameter to 0, the record has the highest priority. Valid values: 0 to 10000.
     *
     * This parameter is used to identify each record. When you add a record, the value of the PriorityId parameter for the new record must be different from the value of the PriorityId parameter of any existing record. When you modify or delete a record, you must also modify or delete the value of the PriorityId parameter for this record.
     * @example 2
     *
     * @var int
     */
    public $priorityId;

    /**
     * @description The connection type.
     *
     * Valid values:
     *
     *   **host**: The record matches TCP/IP connections, including SSL connections and non-SSL connections.
     *   **hostssl**: The record matches only TCP/IP connections that are established over SSL.
     *   **hostnossl**: The record matches only TCP/IP connections that are not established over SSL connections.
     *
     * >  You can set this parameter to hostssl only when SSL encryption is enabled for the instance. For more information, see Configure SSL encryption for an ApsaraDB RDS for PostgreSQL instance.[](~~229518~~)
     * @example host
     *
     * @var string
     */
    public $type;

    /**
     * @description The user who is allowed to access the specified databases. You must specify the user that is used to log on to the RDS instance. If you specify multiple entries, separate the entries with commas (,).
     *
     * @example ldapuser
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'address'    => 'Address',
        'database'   => 'Database',
        'mask'       => 'Mask',
        'method'     => 'Method',
        'option'     => 'Option',
        'priorityId' => 'PriorityId',
        'type'       => 'Type',
        'user'       => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }
        if (null !== $this->priorityId) {
            $res['PriorityId'] = $this->priorityId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hbaItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Option'])) {
            $model->option = $map['Option'];
        }
        if (isset($map['PriorityId'])) {
            $model->priorityId = $map['PriorityId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
