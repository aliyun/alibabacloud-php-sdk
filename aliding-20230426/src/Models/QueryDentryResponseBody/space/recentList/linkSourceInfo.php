<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\space\recentList;

use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\space\recentList\linkSourceInfo\iconUrl;
use AlibabaCloud\Tea\Model;

class linkSourceInfo extends Model
{
    /**
     * @example docx
     *
     * @var string
     */
    public $extension;

    /**
     * @var iconUrl
     */
    public $iconUrl;

    /**
     * @example def
     *
     * @var string
     */
    public $id;

    /**
     * @example 0
     *
     * @var int
     */
    public $linkType;

    /**
     * @example def
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'extension' => 'Extension',
        'iconUrl'   => 'IconUrl',
        'id'        => 'Id',
        'linkType'  => 'LinkType',
        'spaceId'   => 'SpaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->iconUrl) {
            $res['IconUrl'] = null !== $this->iconUrl ? $this->iconUrl->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->linkType) {
            $res['LinkType'] = $this->linkType;
        }
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return linkSourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['IconUrl'])) {
            $model->iconUrl = iconUrl::fromMap($map['IconUrl']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LinkType'])) {
            $model->linkType = $map['LinkType'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
