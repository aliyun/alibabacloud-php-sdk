<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\BindSlbResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $VServerGroupId;

    /**
     * @var string
     */
    public $slbId;

    /**
     * @var string
     */
    public $extSlbIp;

    /**
     * @var int
     */
    public $slbPort;

    /**
     * @var string
     */
    public $extSlbName;

    /**
     * @var string
     */
    public $extSlbId;

    /**
     * @var string
     */
    public $extVServerGroupId;

    /**
     * @var string
     */
    public $slbName;

    /**
     * @var string
     */
    public $slbIp;
    protected $_name = [
        'VServerGroupId'    => 'VServerGroupId',
        'slbId'             => 'SlbId',
        'extSlbIp'          => 'ExtSlbIp',
        'slbPort'           => 'SlbPort',
        'extSlbName'        => 'ExtSlbName',
        'extSlbId'          => 'ExtSlbId',
        'extVServerGroupId' => 'ExtVServerGroupId',
        'slbName'           => 'SlbName',
        'slbIp'             => 'SlbIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->VServerGroupId) {
            $res['VServerGroupId'] = $this->VServerGroupId;
        }
        if (null !== $this->slbId) {
            $res['SlbId'] = $this->slbId;
        }
        if (null !== $this->extSlbIp) {
            $res['ExtSlbIp'] = $this->extSlbIp;
        }
        if (null !== $this->slbPort) {
            $res['SlbPort'] = $this->slbPort;
        }
        if (null !== $this->extSlbName) {
            $res['ExtSlbName'] = $this->extSlbName;
        }
        if (null !== $this->extSlbId) {
            $res['ExtSlbId'] = $this->extSlbId;
        }
        if (null !== $this->extVServerGroupId) {
            $res['ExtVServerGroupId'] = $this->extVServerGroupId;
        }
        if (null !== $this->slbName) {
            $res['SlbName'] = $this->slbName;
        }
        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VServerGroupId'])) {
            $model->VServerGroupId = $map['VServerGroupId'];
        }
        if (isset($map['SlbId'])) {
            $model->slbId = $map['SlbId'];
        }
        if (isset($map['ExtSlbIp'])) {
            $model->extSlbIp = $map['ExtSlbIp'];
        }
        if (isset($map['SlbPort'])) {
            $model->slbPort = $map['SlbPort'];
        }
        if (isset($map['ExtSlbName'])) {
            $model->extSlbName = $map['ExtSlbName'];
        }
        if (isset($map['ExtSlbId'])) {
            $model->extSlbId = $map['ExtSlbId'];
        }
        if (isset($map['ExtVServerGroupId'])) {
            $model->extVServerGroupId = $map['ExtVServerGroupId'];
        }
        if (isset($map['SlbName'])) {
            $model->slbName = $map['SlbName'];
        }
        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }

        return $model;
    }
}
