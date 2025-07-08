<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QuerySmsDetectListNewResponseBody;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $detectContent;

    /**
     * @var string
     */
    public $detectSignName;

    /**
     * @var string
     */
    public $detectTime;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $successRate;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateParam;
    protected $_name = [
        'detectContent' => 'DetectContent',
        'detectSignName' => 'DetectSignName',
        'detectTime' => 'DetectTime',
        'status' => 'Status',
        'successRate' => 'SuccessRate',
        'templateCode' => 'TemplateCode',
        'templateParam' => 'TemplateParam',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectContent) {
            $res['DetectContent'] = $this->detectContent;
        }

        if (null !== $this->detectSignName) {
            $res['DetectSignName'] = $this->detectSignName;
        }

        if (null !== $this->detectTime) {
            $res['DetectTime'] = $this->detectTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->successRate) {
            $res['SuccessRate'] = $this->successRate;
        }

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        if (null !== $this->templateParam) {
            $res['TemplateParam'] = $this->templateParam;
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
        if (isset($map['DetectContent'])) {
            $model->detectContent = $map['DetectContent'];
        }

        if (isset($map['DetectSignName'])) {
            $model->detectSignName = $map['DetectSignName'];
        }

        if (isset($map['DetectTime'])) {
            $model->detectTime = $map['DetectTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SuccessRate'])) {
            $model->successRate = $map['SuccessRate'];
        }

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        if (isset($map['TemplateParam'])) {
            $model->templateParam = $map['TemplateParam'];
        }

        return $model;
    }
}
