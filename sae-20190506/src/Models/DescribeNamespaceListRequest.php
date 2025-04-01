<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class DescribeNamespaceListRequest extends Model
{
    /**
     * @var bool
     */
    public $containCustom;

    /**
     * @var bool
     */
    public $hybridCloudExclude;
    protected $_name = [
        'containCustom' => 'ContainCustom',
        'hybridCloudExclude' => 'HybridCloudExclude',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containCustom) {
            $res['ContainCustom'] = $this->containCustom;
        }

        if (null !== $this->hybridCloudExclude) {
            $res['HybridCloudExclude'] = $this->hybridCloudExclude;
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
        if (isset($map['ContainCustom'])) {
            $model->containCustom = $map['ContainCustom'];
        }

        if (isset($map['HybridCloudExclude'])) {
            $model->hybridCloudExclude = $map['HybridCloudExclude'];
        }

        return $model;
    }
}
