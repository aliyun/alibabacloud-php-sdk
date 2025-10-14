<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataIngestionTemplatesResponseBody\dataIngestionTemplates;

class ListDataIngestionTemplatesResponseBody extends Model
{
    /**
     * @var dataIngestionTemplates[]
     */
    public $dataIngestionTemplates;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataIngestionTemplates' => 'DataIngestionTemplates',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dataIngestionTemplates)) {
            Model::validateArray($this->dataIngestionTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataIngestionTemplates) {
            if (\is_array($this->dataIngestionTemplates)) {
                $res['DataIngestionTemplates'] = [];
                $n1 = 0;
                foreach ($this->dataIngestionTemplates as $item1) {
                    $res['DataIngestionTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DataIngestionTemplates'])) {
            if (!empty($map['DataIngestionTemplates'])) {
                $model->dataIngestionTemplates = [];
                $n1 = 0;
                foreach ($map['DataIngestionTemplates'] as $item1) {
                    $model->dataIngestionTemplates[$n1] = dataIngestionTemplates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
