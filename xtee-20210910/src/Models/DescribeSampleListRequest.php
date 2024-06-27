<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeSampleListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $sampleType;

    /**
     * @var string
     */
    public $sampleValue;
    protected $_name = [
        'lang'        => 'Lang',
        'currentPage' => 'currentPage',
        'pageSize'    => 'pageSize',
        'regId'       => 'regId',
        'sampleType'  => 'sampleType',
        'sampleValue' => 'sampleValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->sampleType) {
            $res['sampleType'] = $this->sampleType;
        }
        if (null !== $this->sampleValue) {
            $res['sampleValue'] = $this->sampleValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSampleListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['sampleType'])) {
            $model->sampleType = $map['sampleType'];
        }
        if (isset($map['sampleValue'])) {
            $model->sampleValue = $map['sampleValue'];
        }

        return $model;
    }
}
