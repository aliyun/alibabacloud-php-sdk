<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonListResponse\data;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonListResponse\data\records\propertyTagList;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $faceUrl;

    /**
     * @var int
     */
    public $firstShotTime;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $searchMatchingRate;

    /**
     * @var int
     */
    public $lastShotTime;

    /**
     * @var propertyTagList[]
     */
    public $propertyTagList;
    protected $_name = [
        'faceUrl'            => 'FaceUrl',
        'firstShotTime'      => 'FirstShotTime',
        'personId'           => 'PersonId',
        'searchMatchingRate' => 'SearchMatchingRate',
        'lastShotTime'       => 'LastShotTime',
        'propertyTagList'    => 'PropertyTagList',
    ];

    public function validate()
    {
        Model::validateRequired('faceUrl', $this->faceUrl, true);
        Model::validateRequired('firstShotTime', $this->firstShotTime, true);
        Model::validateRequired('personId', $this->personId, true);
        Model::validateRequired('searchMatchingRate', $this->searchMatchingRate, true);
        Model::validateRequired('lastShotTime', $this->lastShotTime, true);
        Model::validateRequired('propertyTagList', $this->propertyTagList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }
        if (null !== $this->firstShotTime) {
            $res['FirstShotTime'] = $this->firstShotTime;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->searchMatchingRate) {
            $res['SearchMatchingRate'] = $this->searchMatchingRate;
        }
        if (null !== $this->lastShotTime) {
            $res['LastShotTime'] = $this->lastShotTime;
        }
        if (null !== $this->propertyTagList) {
            $res['PropertyTagList'] = [];
            if (null !== $this->propertyTagList && \is_array($this->propertyTagList)) {
                $n = 0;
                foreach ($this->propertyTagList as $item) {
                    $res['PropertyTagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }
        if (isset($map['FirstShotTime'])) {
            $model->firstShotTime = $map['FirstShotTime'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['SearchMatchingRate'])) {
            $model->searchMatchingRate = $map['SearchMatchingRate'];
        }
        if (isset($map['LastShotTime'])) {
            $model->lastShotTime = $map['LastShotTime'];
        }
        if (isset($map['PropertyTagList'])) {
            if (!empty($map['PropertyTagList'])) {
                $model->propertyTagList = [];
                $n                      = 0;
                foreach ($map['PropertyTagList'] as $item) {
                    $model->propertyTagList[$n++] = null !== $item ? propertyTagList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
