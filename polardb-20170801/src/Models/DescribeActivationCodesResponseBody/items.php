<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeActivationCodesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time when the activation code takes effect.
     *
     * @example 2024-10-16 16:46:20
     *
     * @var string
     */
    public $activateAt;

    /**
     * @description The description of the activation code.
     *
     * @example testCode
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the activation code expires.
     *
     * @example 2054-10-16 16:46:20
     *
     * @var string
     */
    public $expireAt;

    /**
     * @description The time when the activation code was generated.
     *
     * @example 2024-10-16 16:46:20
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The time when the activation code was updated.
     *
     * @example 2024-10-16 16:46:20
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The activation code ID.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The media access control (MAC) address used in the generation of the activation code.
     *
     * @example 12:34:56:78:98:00
     *
     * @var string
     */
    public $macAddress;

    /**
     * @description The name of the activation code.
     *
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @description The unique identifier of the database.
     *
     * @example 1234567890123456
     *
     * @var string
     */
    public $systemIdentifier;
    protected $_name = [
        'activateAt' => 'ActivateAt',
        'description' => 'Description',
        'expireAt' => 'ExpireAt',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'macAddress' => 'MacAddress',
        'name' => 'Name',
        'systemIdentifier' => 'SystemIdentifier',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activateAt) {
            $res['ActivateAt'] = $this->activateAt;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expireAt) {
            $res['ExpireAt'] = $this->expireAt;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->systemIdentifier) {
            $res['SystemIdentifier'] = $this->systemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivateAt'])) {
            $model->activateAt = $map['ActivateAt'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpireAt'])) {
            $model->expireAt = $map['ExpireAt'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SystemIdentifier'])) {
            $model->systemIdentifier = $map['SystemIdentifier'];
        }

        return $model;
    }
}
