<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateCnameFlatteningRequest extends Model
{
    /**
     * @var string
     */
    public $flattenMode;
    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'flattenMode' => 'FlattenMode',
        'siteId'      => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flattenMode) {
            $res['FlattenMode'] = $this->flattenMode;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['FlattenMode'])) {
            $model->flattenMode = $map['FlattenMode'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
