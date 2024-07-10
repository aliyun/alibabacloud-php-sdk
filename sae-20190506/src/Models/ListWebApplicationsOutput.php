<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'nextToken'                       => 'NextToken',
        'webApplicationWithInstanceCount' => 'WebApplicationWithInstanceCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->webApplicationWithInstanceCount) {
            $res['WebApplicationWithInstanceCount'] = [];
            if (null !== $this->webApplicationWithInstanceCount && \is_array($this->webApplicationWithInstanceCount)) {
                $n = 0;
                foreach ($this->webApplicationWithInstanceCount as $item) {
                    $res['WebApplicationWithInstanceCount'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWebApplicationsOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['WebApplicationWithInstanceCount'])) {
            if (!empty($map['WebApplicationWithInstanceCount'])) {
                $model->webApplicationWithInstanceCount = [];
                $n                                      = 0;
                foreach ($map['WebApplicationWithInstanceCount'] as $item) {
                    $model->webApplicationWithInstanceCount[$n++] = null !== $item ? WebApplicationWithInstanceCount::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
