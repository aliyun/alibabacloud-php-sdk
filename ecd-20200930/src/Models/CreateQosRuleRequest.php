<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateQosRuleRequest extends Model
{
    /**
     * @var string[]
     */
    public $authAndroidId;

    /**
     * @var string[]
     */
    public $authDesktopId;

    /**
     * @var int
     */
    public $download;

    /**
     * @var string
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $qosRuleName;

    /**
     * @var int
     */
    public $upload;
    protected $_name = [
        'authAndroidId' => 'AuthAndroidId',
        'authDesktopId' => 'AuthDesktopId',
        'download' => 'Download',
        'networkPackageId' => 'NetworkPackageId',
        'qosRuleName' => 'QosRuleName',
        'upload' => 'Upload',
    ];

    public function validate()
    {
        if (\is_array($this->authAndroidId)) {
            Model::validateArray($this->authAndroidId);
        }
        if (\is_array($this->authDesktopId)) {
            Model::validateArray($this->authDesktopId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authAndroidId) {
            if (\is_array($this->authAndroidId)) {
                $res['AuthAndroidId'] = [];
                $n1 = 0;
                foreach ($this->authAndroidId as $item1) {
                    $res['AuthAndroidId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->authDesktopId) {
            if (\is_array($this->authDesktopId)) {
                $res['AuthDesktopId'] = [];
                $n1 = 0;
                foreach ($this->authDesktopId as $item1) {
                    $res['AuthDesktopId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->download) {
            $res['Download'] = $this->download;
        }

        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
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
        if (isset($map['AuthAndroidId'])) {
            if (!empty($map['AuthAndroidId'])) {
                $model->authAndroidId = [];
                $n1 = 0;
                foreach ($map['AuthAndroidId'] as $item1) {
                    $model->authAndroidId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AuthDesktopId'])) {
            if (!empty($map['AuthDesktopId'])) {
                $model->authDesktopId = [];
                $n1 = 0;
                foreach ($map['AuthDesktopId'] as $item1) {
                    $model->authDesktopId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Download'])) {
            $model->download = $map['Download'];
        }

        if (isset($map['NetworkPackageId'])) {
            $model->networkPackageId = $map['NetworkPackageId'];
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
