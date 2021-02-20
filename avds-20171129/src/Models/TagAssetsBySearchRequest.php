<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models;

use AlibabaCloud\Tea\Model;

class TagAssetsBySearchRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $search;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'sourceIp'  => 'SourceIp',
        'source'    => 'Source',
        'search'    => 'Search',
        'assetType' => 'AssetType',
        'tags'      => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->search) {
            $res['Search'] = $this->search;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TagAssetsBySearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Search'])) {
            $model->search = $map['Search'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
