<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ModifyInstanceFeaturesRequest;

use AlibabaCloud\Dara\Model;

class siteFeatures extends Model
{
    /**
     * @var string
     */
    public $features;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'features' => 'Features',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->features) {
            $res['Features'] = $this->features;
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
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
