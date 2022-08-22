<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CreatePlayingListRequest\openCreatePlayingListRequest;

use AlibabaCloud\Tea\Model;

class contentList extends Model
{
    /**
     * @var string
     */
    public $rawId;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'rawId'  => 'RawId',
        'source' => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rawId) {
            $res['RawId'] = $this->rawId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return contentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RawId'])) {
            $model->rawId = $map['RawId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
