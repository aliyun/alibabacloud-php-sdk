<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\space\recentList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryDentryResponseBody\space\recentList\linkSourceInfo\iconUrl;

class linkSourceInfo extends Model
{
    /**
     * @var string
     */
    public $extension;
    /**
     * @var iconUrl
     */
    public $iconUrl;
    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $linkType;
    /**
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
        if (null !== $this->iconUrl) {
            $this->iconUrl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        if (null !== $this->iconUrl) {
            $res['IconUrl'] = null !== $this->iconUrl ? $this->iconUrl->toArray($noStream) : $this->iconUrl;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
