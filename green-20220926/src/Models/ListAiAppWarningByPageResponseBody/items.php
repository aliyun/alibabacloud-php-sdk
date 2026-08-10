<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppWarningByPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAiAppWarningByPageResponseBody\items\labels;

class items extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var labels[]
     */
    public $labels;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var int
     */
    public $warningCount;

    /**
     * @var string
     */
    public $warningTime;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'labels' => 'Labels',
        'serviceCode' => 'ServiceCode',
        'traceId' => 'TraceId',
        'warningCount' => 'WarningCount',
        'warningTime' => 'WarningTime',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        if (null !== $this->warningCount) {
            $res['WarningCount'] = $this->warningCount;
        }

        if (null !== $this->warningTime) {
            $res['WarningTime'] = $this->warningTime;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = labels::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        if (isset($map['WarningCount'])) {
            $model->warningCount = $map['WarningCount'];
        }

        if (isset($map['WarningTime'])) {
            $model->warningTime = $map['WarningTime'];
        }

        return $model;
    }
}
