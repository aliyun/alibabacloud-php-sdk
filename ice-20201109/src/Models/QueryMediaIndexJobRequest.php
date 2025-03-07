<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class QueryMediaIndexJobRequest extends Model
{
    /**
     * @description The ID of the media asset.
     *
     * This parameter is required.
     * @example c2e77390f75271ec802f0674a2ce6***
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The name of the search library. Default value: ims-default-search-lib.
     *
     * @example test1
     *
     * @var string
     */
    public $searchLibName;
    protected $_name = [
        'mediaId'       => 'MediaId',
        'searchLibName' => 'SearchLibName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaIndexJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
