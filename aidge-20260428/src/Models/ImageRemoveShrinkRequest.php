<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ImageRemoveShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $nonObjectRemoveElementsShrink;

    /**
     * @var string
     */
    public $objectRemoveElementsShrink;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $userImageShrink;

    /**
     * @var string
     */
    public $userTextShrink;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
        'mask' => 'Mask',
        'nonObjectRemoveElementsShrink' => 'NonObjectRemoveElements',
        'objectRemoveElementsShrink' => 'ObjectRemoveElements',
        'position' => 'Position',
        'userImageShrink' => 'UserImage',
        'userTextShrink' => 'UserText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->nonObjectRemoveElementsShrink) {
            $res['NonObjectRemoveElements'] = $this->nonObjectRemoveElementsShrink;
        }

        if (null !== $this->objectRemoveElementsShrink) {
            $res['ObjectRemoveElements'] = $this->objectRemoveElementsShrink;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }

        if (null !== $this->userImageShrink) {
            $res['UserImage'] = $this->userImageShrink;
        }

        if (null !== $this->userTextShrink) {
            $res['UserText'] = $this->userTextShrink;
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['NonObjectRemoveElements'])) {
            $model->nonObjectRemoveElementsShrink = $map['NonObjectRemoveElements'];
        }

        if (isset($map['ObjectRemoveElements'])) {
            $model->objectRemoveElementsShrink = $map['ObjectRemoveElements'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        if (isset($map['UserImage'])) {
            $model->userImageShrink = $map['UserImage'];
        }

        if (isset($map['UserText'])) {
            $model->userTextShrink = $map['UserText'];
        }

        return $model;
    }
}
