<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListWebApplicationsOutput extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var WebApplicationWithInstanceCount[]
     */
    public $webApplicationWithInstanceCount;
    protected $_name = [
        'nextToken' => 'NextToken',
        'webApplicationWithInstanceCount' => 'WebApplicationWithInstanceCount',
    ];

    public function validate()
    {
        if (\is_array($this->webApplicationWithInstanceCount)) {
            Model::validateArray($this->webApplicationWithInstanceCount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->webApplicationWithInstanceCount) {
            if (\is_array($this->webApplicationWithInstanceCount)) {
                $res['WebApplicationWithInstanceCount'] = [];
                $n1 = 0;
                foreach ($this->webApplicationWithInstanceCount as $item1) {
                    $res['WebApplicationWithInstanceCount'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['WebApplicationWithInstanceCount'])) {
            if (!empty($map['WebApplicationWithInstanceCount'])) {
                $model->webApplicationWithInstanceCount = [];
                $n1 = 0;
                foreach ($map['WebApplicationWithInstanceCount'] as $item1) {
                    $model->webApplicationWithInstanceCount[$n1++] = WebApplicationWithInstanceCount::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
