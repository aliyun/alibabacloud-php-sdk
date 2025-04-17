<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class RestoreMediaRequest extends Model
{
    /**
     * @var string
     */
    public $mediaIds;

    /**
     * @var string
     */
    public $restoreDays;

    /**
     * @var string
     */
    public $restoreTier;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'mediaIds' => 'MediaIds',
        'restoreDays' => 'RestoreDays',
        'restoreTier' => 'RestoreTier',
        'scope' => 'Scope',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }

        if (null !== $this->restoreDays) {
            $res['RestoreDays'] = $this->restoreDays;
        }

        if (null !== $this->restoreTier) {
            $res['RestoreTier'] = $this->restoreTier;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        if (isset($map['RestoreDays'])) {
            $model->restoreDays = $map['RestoreDays'];
        }

        if (isset($map['RestoreTier'])) {
            $model->restoreTier = $map['RestoreTier'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
