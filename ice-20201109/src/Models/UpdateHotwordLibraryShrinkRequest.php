<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateHotwordLibraryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $hotwordLibraryId;

    /**
     * @var string
     */
    public $hotwordsShrink;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'hotwordLibraryId' => 'HotwordLibraryId',
        'hotwordsShrink' => 'Hotwords',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hotwordLibraryId) {
            $res['HotwordLibraryId'] = $this->hotwordLibraryId;
        }

        if (null !== $this->hotwordsShrink) {
            $res['Hotwords'] = $this->hotwordsShrink;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['HotwordLibraryId'])) {
            $model->hotwordLibraryId = $map['HotwordLibraryId'];
        }

        if (isset($map['Hotwords'])) {
            $model->hotwordsShrink = $map['Hotwords'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
