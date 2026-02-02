<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyQosRuleRequest extends Model
{
    /**
     * @var int
     */
    public $download;

    /**
     * @var string
     */
    public $qosRuleId;

    /**
     * @var string
     */
    public $qosRuleName;

    /**
     * @var int
     */
    public $upload;
    protected $_name = [
        'download' => 'Download',
        'qosRuleId' => 'QosRuleId',
        'qosRuleName' => 'QosRuleName',
        'upload' => 'Upload',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->download) {
            $res['Download'] = $this->download;
        }

        if (null !== $this->qosRuleId) {
            $res['QosRuleId'] = $this->qosRuleId;
        }

        if (null !== $this->qosRuleName) {
            $res['QosRuleName'] = $this->qosRuleName;
        }

        if (null !== $this->upload) {
            $res['Upload'] = $this->upload;
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
        if (isset($map['Download'])) {
            $model->download = $map['Download'];
        }

        if (isset($map['QosRuleId'])) {
            $model->qosRuleId = $map['QosRuleId'];
        }

        if (isset($map['QosRuleName'])) {
            $model->qosRuleName = $map['QosRuleName'];
        }

        if (isset($map['Upload'])) {
            $model->upload = $map['Upload'];
        }

        return $model;
    }
}
