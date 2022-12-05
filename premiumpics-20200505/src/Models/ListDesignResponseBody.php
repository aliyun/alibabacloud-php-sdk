<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\SDK\Premiumpics\V20200505\Models\ListDesignResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListDesignResponseBody extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $designVersion;

    /**
     * @var int
     */
    public $end;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'data'          => 'Data',
        'designVersion' => 'DesignVersion',
        'end'           => 'End',
        'pageNumber'    => 'PageNumber',
        'requestId'     => 'RequestId',
        'success'       => 'Success',
        'version'       => 'Version',
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
        if (null !== $this->designVersion) {
            $res['DesignVersion'] = $this->designVersion;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
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
     * @return ListDesignResponseBody
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
        if (isset($map['DesignVersion'])) {
            $model->designVersion = $map['DesignVersion'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
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
