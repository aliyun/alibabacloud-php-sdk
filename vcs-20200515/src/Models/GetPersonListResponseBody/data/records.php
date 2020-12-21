<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonListResponseBody\data;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetPersonListResponseBody\data\records\propertyTagList;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var propertyTagList[]
     */
    public $propertyTagList;

    /**
     * @var string
     */
    public $faceUrl;

    /**
     * @var string
     */
    public $searchMatchingRate;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var int
     */
    public $lastShotTime;

    /**
     * @var int
     */
    public $firstShotTime;
    protected $_name = [
        'propertyTagList'    => 'PropertyTagList',
        'faceUrl'            => 'FaceUrl',
        'searchMatchingRate' => 'SearchMatchingRate',
        'personId'           => 'PersonId',
        'lastShotTime'       => 'LastShotTime',
        'firstShotTime'      => 'FirstShotTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->propertyTagList) {
            $res['PropertyTagList'] = [];
            if (null !== $this->propertyTagList && \is_array($this->propertyTagList)) {
                $n = 0;
                foreach ($this->propertyTagList as $item) {
                    $res['PropertyTagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }
        if (null !== $this->searchMatchingRate) {
            $res['SearchMatchingRate'] = $this->searchMatchingRate;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->lastShotTime) {
            $res['LastShotTime'] = $this->lastShotTime;
        }
        if (null !== $this->firstShotTime) {
            $res['FirstShotTime'] = $this->firstShotTime;
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
        if (isset($map['PropertyTagList'])) {
            if (!empty($map['PropertyTagList'])) {
                $model->propertyTagList = [];
                $n                      = 0;
                foreach ($map['PropertyTagList'] as $item) {
                    $model->propertyTagList[$n++] = null !== $item ? propertyTagList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }
        if (isset($map['SearchMatchingRate'])) {
            $model->searchMatchingRate = $map['SearchMatchingRate'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['LastShotTime'])) {
            $model->lastShotTime = $map['LastShotTime'];
        }
        if (isset($map['FirstShotTime'])) {
            $model->firstShotTime = $map['FirstShotTime'];
        }

        return $model;
    }
}
