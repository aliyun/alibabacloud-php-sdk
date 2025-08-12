<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetEntityStoreDataResponseBody extends Model
{
    /**
     * @var string[][]
     */
    public $data;

    /**
     * @var string[]
     */
    public $header;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'data' => 'data',
        'header' => 'header',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (\is_array($this->header)) {
            Model::validateArray($this->header);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    if (\is_array($item1)) {
                        $res['data'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['data'][$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->header) {
            if (\is_array($this->header)) {
                $res['header'] = [];
                $n1 = 0;
                foreach ($this->header as $item1) {
                    $res['header'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['data'] as $item1) {
                    if (!empty($item1)) {
                        $model->data[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->data[$n1][$n2] = $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['header'])) {
            if (!empty($map['header'])) {
                $model->header = [];
                $n1 = 0;
                foreach ($map['header'] as $item1) {
                    $model->header[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
