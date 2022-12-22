<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListLogosResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListLogosResponseBody extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @example B2022040710171504189511
     *
     * @var string
     */
    public $logoVersion;

    /**
     * @example 2
     *
     * @var int
     */
    public $nextPage;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 6D61BB02-171C-51D7-8E85-1FC1920F45D4
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
     * @example 2018-05-10
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'data'        => 'Data',
        'logoVersion' => 'LogoVersion',
        'nextPage'    => 'NextPage',
        'pageNumber'  => 'PageNumber',
        'requestId'   => 'RequestId',
        'success'     => 'Success',
        'version'     => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->logoVersion) {
            $res['LogoVersion'] = $this->logoVersion;
        }
        if (null !== $this->nextPage) {
            $res['NextPage'] = $this->nextPage;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogoVersion'])) {
            $model->logoVersion = $map['LogoVersion'];
        }
        if (isset($map['NextPage'])) {
            $model->nextPage = $map['NextPage'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
