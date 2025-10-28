<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\BindSlbResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $extSlbId;

    /**
     * @var string
     */
    public $extSlbIp;

    /**
     * @var string
     */
    public $extSlbName;

    /**
     * @var string
     */
    public $extVServerGroupId;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $slbIp;

    /**
     * @var string
     */
    public $slbName;

    /**
     * @var int
     */
    public $slbPort;

    /**
     * @var string
     */
    public $VServerGroupId;
    protected $_name = [
        'extSlbId' => 'ExtSlbId',
        'extSlbIp' => 'ExtSlbIp',
        'extSlbName' => 'ExtSlbName',
        'extVServerGroupId' => 'ExtVServerGroupId',
        'slbId' => 'SlbId',
        'slbIp' => 'SlbIp',
        'slbName' => 'SlbName',
        'slbPort' => 'SlbPort',
        'VServerGroupId' => 'VServerGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extSlbId) {
            $res['ExtSlbId'] = $this->extSlbId;
        }

        if (null !== $this->extSlbIp) {
            $res['ExtSlbIp'] = $this->extSlbIp;
        }

        if (null !== $this->extSlbName) {
            $res['ExtSlbName'] = $this->extSlbName;
        }

        if (null !== $this->extVServerGroupId) {
            $res['ExtVServerGroupId'] = $this->extVServerGroupId;
        }

        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }

        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }

        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }

        if (null !== $this->slbPort) {
            $res['SlbPort'] = $this->slbPort;
        }

        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
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
        if (isset($map['ExtSlbId'])) {
            $model->extSlbId = $map['ExtSlbId'];
        }

        if (isset($map['ExtSlbIp'])) {
            $model->extSlbIp = $map['ExtSlbIp'];
        }

        if (isset($map['ExtSlbName'])) {
            $model->extSlbName = $map['ExtSlbName'];
        }

        if (isset($map['ExtVServerGroupId'])) {
            $model->extVServerGroupId = $map['ExtVServerGroupId'];
        }

        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }

        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }

        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }

        if (isset($map['SlbPort'])) {
            $model->slbPort = $map['SlbPort'];
        }

        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }

        return $model;
    }
}
