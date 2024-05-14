<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EduEmbed\V20240101\Models;

use AlibabaCloud\SDK\EduEmbed\V20240101\Models\PageListLabReservationsResponseBody\labReservations;
use AlibabaCloud\Tea\Model;

class PageListLabReservationsResponseBody extends Model
{
    /**
     * @example 00000
     *
     * @var string
     */
    public $code;

    /**
     * @var labReservations[]
     */
    public $labReservations;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 9ADC729B-...
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example 32
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'            => 'Code',
        'labReservations' => 'LabReservations',
        'message'         => 'Message',
        'page'            => 'Page',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->labReservations) {
            $res['LabReservations'] = [];
            if (null !== $this->labReservations && \is_array($this->labReservations)) {
                $n = 0;
                foreach ($this->labReservations as $item) {
                    $res['LabReservations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageListLabReservationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LabReservations'])) {
            if (!empty($map['LabReservations'])) {
                $model->labReservations = [];
                $n                      = 0;
                foreach ($map['LabReservations'] as $item) {
                    $model->labReservations[$n++] = null !== $item ? labReservations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
