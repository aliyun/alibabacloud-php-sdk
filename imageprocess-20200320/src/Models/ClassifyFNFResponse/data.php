<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponse;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponse\data\fractures;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var fractures[]
     */
    public $fractures;
    protected $_name = [
        'imageUrl'  => 'ImageUrl',
        'orgId'     => 'OrgId',
        'orgName'   => 'OrgName',
        'fractures' => 'Fractures',
    ];

    public function validate()
    {
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('orgId', $this->orgId, true);
        Model::validateRequired('orgName', $this->orgName, true);
        Model::validateRequired('fractures', $this->fractures, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->fractures) {
            $res['Fractures'] = [];
            if (null !== $this->fractures && \is_array($this->fractures)) {
                $n = 0;
                foreach ($this->fractures as $item) {
                    $res['Fractures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['Fractures'])) {
            if (!empty($map['Fractures'])) {
                $model->fractures = [];
                $n                = 0;
                foreach ($map['Fractures'] as $item) {
                    $model->fractures[$n++] = null !== $item ? fractures::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
