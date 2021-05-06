<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry;

use AlibabaCloud\Tea\Model;

class asPaths extends Model
{
    /**
     * @var string[]
     */
    public $asPath;
    protected $_name = [
        'asPath' => 'AsPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asPath) {
            $res['AsPath'] = $this->asPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return asPaths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPath'])) {
            if (!empty($map['AsPath'])) {
                $model->asPath = $map['AsPath'];
            }
        }

        return $model;
    }
}
