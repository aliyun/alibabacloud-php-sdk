<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class ListZkTrackRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The end timestamp. Unit: seconds.
     *
     * @example 1669619383
     *
     * @var int
     */
    public $endTs;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-0ju2yq****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The path.
     *
     * @example /path
     *
     * @var string
     */
    public $path;

    /**
     * @description The request parameters.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @description Specifies whether entries are sorted in reverse chronological order.
     *
     * @example false
     *
     * @var bool
     */
    public $reverse;

    /**
     * @description The session ID.
     *
     * @example 0x301fdfbdbf00***
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The start timestamp. Unit: seconds.
     *
     * @example 1669618483
     *
     * @var int
     */
    public $startTs;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'endTs'          => 'EndTs',
        'instanceId'     => 'InstanceId',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'path'           => 'Path',
        'requestPars'    => 'RequestPars',
        'reverse'        => 'Reverse',
        'sessionId'      => 'SessionId',
        'startTs'        => 'StartTs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->reverse) {
            $res['Reverse'] = $this->reverse;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListZkTrackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['Reverse'])) {
            $model->reverse = $map['Reverse'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        return $model;
    }
}
