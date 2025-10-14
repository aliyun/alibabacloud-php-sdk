<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListDataSourceTemplatesResponseBody\dataSourceTemplates;

class ListDataSourceTemplatesResponseBody extends Model
{
    /**
     * @var dataSourceTemplates[]
     */
    public $dataSourceTemplates;

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
        'dataSourceTemplates' => 'DataSourceTemplates',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dataSourceTemplates)) {
            Model::validateArray($this->dataSourceTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceTemplates) {
            if (\is_array($this->dataSourceTemplates)) {
                $res['DataSourceTemplates'] = [];
                $n1 = 0;
                foreach ($this->dataSourceTemplates as $item1) {
                    $res['DataSourceTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataSourceTemplates'])) {
            if (!empty($map['DataSourceTemplates'])) {
                $model->dataSourceTemplates = [];
                $n1 = 0;
                foreach ($map['DataSourceTemplates'] as $item1) {
                    $model->dataSourceTemplates[$n1] = dataSourceTemplates::fromMap($item1);
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
