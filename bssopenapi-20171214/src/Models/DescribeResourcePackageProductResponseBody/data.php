<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeResourcePackageProductResponseBody\data\resourcePackages;

class data extends Model
{
    /**
     * @var resourcePackages
     */
    public $resourcePackages;
    protected $_name = [
        'resourcePackages' => 'ResourcePackages',
    ];

    public function validate()
    {
        if (null !== $this->resourcePackages) {
            $this->resourcePackages->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourcePackages) {
            $res['ResourcePackages'] = null !== $this->resourcePackages ? $this->resourcePackages->toArray($noStream) : $this->resourcePackages;
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
        if (isset($map['ResourcePackages'])) {
            $model->resourcePackages = resourcePackages::fromMap($map['ResourcePackages']);
        }

        return $model;
    }
}
