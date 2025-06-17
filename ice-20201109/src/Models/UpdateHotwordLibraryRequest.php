<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateHotwordLibraryRequest extends Model
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
     * @var Hotword[]
     */
    public $hotwords;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'hotwordLibraryId' => 'HotwordLibraryId',
        'hotwords' => 'Hotwords',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->hotwords)) {
            Model::validateArray($this->hotwords);
        }
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

        if (null !== $this->hotwords) {
            if (\is_array($this->hotwords)) {
                $res['Hotwords'] = [];
                $n1 = 0;
                foreach ($this->hotwords as $item1) {
                    $res['Hotwords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Hotwords'])) {
                $model->hotwords = [];
                $n1 = 0;
                foreach ($map['Hotwords'] as $item1) {
                    $model->hotwords[$n1] = Hotword::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
