<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardLookupTableRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardLookupTableRequest\updateCommand\directoryReference;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateStandardLookupTableRequest\updateCommand\lookupTableValueList;

class updateCommand extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var directoryReference
     */
    public $directoryReference;

    /**
     * @var int
     */
    public $id;

    /**
     * @var lookupTableValueList[]
     */
    public $lookupTableValueList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;
    protected $_name = [
        'code' => 'Code',
        'description' => 'Description',
        'directoryReference' => 'DirectoryReference',
        'id' => 'Id',
        'lookupTableValueList' => 'LookupTableValueList',
        'name' => 'Name',
        'owner' => 'Owner',
    ];

    public function validate()
    {
        if (null !== $this->directoryReference) {
            $this->directoryReference->validate();
        }
        if (\is_array($this->lookupTableValueList)) {
            Model::validateArray($this->lookupTableValueList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->directoryReference) {
            $res['DirectoryReference'] = null !== $this->directoryReference ? $this->directoryReference->toArray($noStream) : $this->directoryReference;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lookupTableValueList) {
            if (\is_array($this->lookupTableValueList)) {
                $res['LookupTableValueList'] = [];
                $n1 = 0;
                foreach ($this->lookupTableValueList as $item1) {
                    $res['LookupTableValueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DirectoryReference'])) {
            $model->directoryReference = directoryReference::fromMap($map['DirectoryReference']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LookupTableValueList'])) {
            if (!empty($map['LookupTableValueList'])) {
                $model->lookupTableValueList = [];
                $n1 = 0;
                foreach ($map['LookupTableValueList'] as $item1) {
                    $model->lookupTableValueList[$n1] = lookupTableValueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        return $model;
    }
}
