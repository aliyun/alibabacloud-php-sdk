<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFaceGroupsResponseBody;

use AlibabaCloud\SDK\Multimediaai\V20190810\Models\ListFaceGroupsResponseBody\faceGroups\templates;
use AlibabaCloud\Tea\Model;

class faceGroups extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $faceGroupName;

    /**
     * @var int
     */
    public $personCount;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var int
     */
    public $faceGroupId;

    /**
     * @var templates[]
     */
    public $templates;
    protected $_name = [
        'description'   => 'Description',
        'faceGroupName' => 'FaceGroupName',
        'personCount'   => 'PersonCount',
        'imageCount'    => 'ImageCount',
        'faceGroupId'   => 'FaceGroupId',
        'templates'     => 'Templates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->faceGroupName) {
            $res['FaceGroupName'] = $this->faceGroupName;
        }
        if (null !== $this->personCount) {
            $res['PersonCount'] = $this->personCount;
        }
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->faceGroupId) {
            $res['FaceGroupId'] = $this->faceGroupId;
        }
        if (null !== $this->templates) {
            $res['Templates'] = [];
            if (null !== $this->templates && \is_array($this->templates)) {
                $n = 0;
                foreach ($this->templates as $item) {
                    $res['Templates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FaceGroupName'])) {
            $model->faceGroupName = $map['FaceGroupName'];
        }
        if (isset($map['PersonCount'])) {
            $model->personCount = $map['PersonCount'];
        }
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['FaceGroupId'])) {
            $model->faceGroupId = $map['FaceGroupId'];
        }
        if (isset($map['Templates'])) {
            if (!empty($map['Templates'])) {
                $model->templates = [];
                $n                = 0;
                foreach ($map['Templates'] as $item) {
                    $model->templates[$n++] = null !== $item ? templates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
