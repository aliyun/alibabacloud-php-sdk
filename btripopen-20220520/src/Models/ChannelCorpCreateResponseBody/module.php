<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ChannelCorpCreateResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $administratorName;

    /**
     * @example 18378889782
     *
     * @var string
     */
    public $administratorPhone;

    /**
     * @example dingaa15ca45cba9ee744a5
     *
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @example open12mplkebufu8701012jq
     *
     * @var string
     */
    public $openAgentId;
    protected $_name = [
        'administratorName'  => 'administrator_name',
        'administratorPhone' => 'administrator_phone',
        'corpId'             => 'corp_id',
        'corpName'           => 'corp_name',
        'openAgentId'        => 'open_agent_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->administratorName) {
            $res['administrator_name'] = $this->administratorName;
        }
        if (null !== $this->administratorPhone) {
            $res['administrator_phone'] = $this->administratorPhone;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }
        if (null !== $this->openAgentId) {
            $res['open_agent_id'] = $this->openAgentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['administrator_name'])) {
            $model->administratorName = $map['administrator_name'];
        }
        if (isset($map['administrator_phone'])) {
            $model->administratorPhone = $map['administrator_phone'];
        }
        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }
        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }
        if (isset($map['open_agent_id'])) {
            $model->openAgentId = $map['open_agent_id'];
        }

        return $model;
    }
}
