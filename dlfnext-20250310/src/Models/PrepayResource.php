<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class PrepayResource extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $catalogName;

    /**
     * @var int
     */
    public $cu;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;
    protected $_name = [
        'catalogId' => 'catalogId',
        'catalogName' => 'catalogName',
        'cu' => 'cu',
        'expireTime' => 'expireTime',
        'gmtCreate' => 'gmtCreate',
        'instanceId' => 'instanceId',
        'instanceStatus' => 'instanceStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['catalogId'] = $this->catalogId;
        }

        if (null !== $this->catalogName) {
            $res['catalogName'] = $this->catalogName;
        }

        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['instanceStatus'] = $this->instanceStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['catalogId'])) {
            $model->catalogId = $map['catalogId'];
        }

        if (isset($map['catalogName'])) {
            $model->catalogName = $map['catalogName'];
        }

        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceStatus'])) {
            $model->instanceStatus = $map['instanceStatus'];
        }

        return $model;
    }
}
