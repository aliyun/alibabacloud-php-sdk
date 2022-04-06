<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectKneeKeypointXRayResponseBody\data\keyPoints;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var keyPoints[]
     */
    public $keyPoints;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;
    protected $_name = [
        'imageUrl'  => 'ImageUrl',
        'keyPoints' => 'KeyPoints',
        'orgId'     => 'OrgId',
        'orgName'   => 'OrgName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->keyPoints) {
            $res['KeyPoints'] = [];
            if (null !== $this->keyPoints && \is_array($this->keyPoints)) {
                $n = 0;
                foreach ($this->keyPoints as $item) {
                    $res['KeyPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['KeyPoints'])) {
            if (!empty($map['KeyPoints'])) {
                $model->keyPoints = [];
                $n                = 0;
                foreach ($map['KeyPoints'] as $item) {
                    $model->keyPoints[$n++] = null !== $item ? keyPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        return $model;
    }
}
