<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems\hbaLogItem\afterHbaItems;

use AlibabaCloud\Tea\Model;

class hbaItem extends Model
{
    /**
     * @description The IP address.
     *
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $address;

    /**
     * @description The name of the database.
     *
     * @example all
     *
     * @var string
     */
    public $database;

    /**
     * @description The mask of the IP address.
     *
     * @example null
     *
     * @var string
     */
    public $mask;

    /**
     * @description The authentication method.
     *
     * @example ldap
     *
     * @var string
     */
    public $method;

    /**
     * @description The value of this parameter was set based on the value of the Method parameter.
     *
     * @example null
     *
     * @var string
     */
    public $option;

    /**
     * @description The priority.
     *
     * @example 0
     *
     * @var int
     */
    public $priorityId;

    /**
     * @description The connection type.
     *
     * @example host
     *
     * @var string
     */
    public $type;

    /**
     * @description The username of the account.
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
