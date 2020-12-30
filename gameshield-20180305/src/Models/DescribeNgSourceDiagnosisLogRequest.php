<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\Tea\Model;

class DescribeNgSourceDiagnosisLogRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourcePort;

    /**
     * @var string
     */
    public $detectPort;

    /**
     * @var string
     */
    public $detectIp;
    protected $_name = [
        'sourceIp'   => 'SourceIp',
        'lang'       => 'Lang',
        'startTime'  => 'StartTime',
        'endTime'    => 'EndTime',
        'page'       => 'Page',
        'pageSize'   => 'PageSize',
        'appId'      => 'AppId',
        'bizId'      => 'BizId',
        'source'     => 'Source',
        'sourcePort' => 'SourcePort',
        'detectPort' => 'DetectPort',
        'detectIp'   => 'DetectIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->detectPort) {
            $res['DetectPort'] = $this->detectPort;
        }
        if (null !== $this->detectIp) {
            $res['DetectIp'] = $this->detectIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNgSourceDiagnosisLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['DetectPort'])) {
            $model->detectPort = $map['DetectPort'];
        }
        if (isset($map['DetectIp'])) {
            $model->detectIp = $map['DetectIp'];
        }

        return $model;
    }
}
