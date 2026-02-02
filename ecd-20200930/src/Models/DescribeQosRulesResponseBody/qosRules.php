<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeQosRulesResponseBody;

use AlibabaCloud\Dara\Model;

class qosRules extends Model
{
    /**
     * @var string
     */
    public $desktopCount;

    /**
     * @var string
     */
    public $download;

    /**
     * @var string
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $qosRuleId;

    /**
     * @var string
     */
    public $qosRuleName;

    /**
     * @var string
     */
    public $upload;
    protected $_name = [
        'desktopCount' => 'DesktopCount',
        'download' => 'Download',
        'networkPackageId' => 'NetworkPackageId',
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
        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }

        if (null !== $this->download) {
            $res['Download'] = $this->download;
        }

        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
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
        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }

        if (isset($map['Download'])) {
            $model->download = $map['Download'];
        }

        if (isset($map['NetworkPackageId'])) {
            $model->networkPackageId = $map['NetworkPackageId'];
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
