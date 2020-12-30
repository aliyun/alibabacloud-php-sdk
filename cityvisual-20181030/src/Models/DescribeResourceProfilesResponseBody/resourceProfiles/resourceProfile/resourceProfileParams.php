<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeResourceProfilesResponseBody\resourceProfiles\resourceProfile;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeResourceProfilesResponseBody\resourceProfiles\resourceProfile\resourceProfileParams\resourceProfileParam;
use AlibabaCloud\Tea\Model;

class resourceProfileParams extends Model
{
    /**
     * @var resourceProfileParam[]
     */
    public $resourceProfileParam;
    protected $_name = [
        'resourceProfileParam' => 'ResourceProfileParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceProfileParam) {
            $res['ResourceProfileParam'] = [];
            if (null !== $this->resourceProfileParam && \is_array($this->resourceProfileParam)) {
                $n = 0;
                foreach ($this->resourceProfileParam as $item) {
                    $res['ResourceProfileParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceProfileParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceProfileParam'])) {
            if (!empty($map['ResourceProfileParam'])) {
                $model->resourceProfileParam = [];
                $n                           = 0;
                foreach ($map['ResourceProfileParam'] as $item) {
                    $model->resourceProfileParam[$n++] = null !== $item ? resourceProfileParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
