<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateOriginProtectionRequest extends Model
{
    /**
     * @var string
     */
    public $originConverge;
    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'originConverge' => 'OriginConverge',
        'siteId'         => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originConverge) {
            $res['OriginConverge'] = $this->originConverge;
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
        if (isset($map['OriginConverge'])) {
            $model->originConverge = $map['OriginConverge'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
