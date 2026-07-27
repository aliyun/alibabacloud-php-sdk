<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDevProdProjectRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDevProdProjectRequest\updateCommand\whiteLists;

class updateCommand extends Model
{
    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var int
     */
    public $devComputeSourceId;

    /**
     * @var string
     */
    public $devDescription;

    /**
     * @var int
     */
    public $devStreamComputeSourceId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameSpaceTag;

    /**
     * @var int
     */
    public $prodComputeSourceId;

    /**
     * @var string
     */
    public $prodDescription;

    /**
     * @var int
     */
    public $prodStreamComputeSourceId;

    /**
     * @var whiteLists[]
     */
    public $whiteLists;
    protected $_name = [
        'bizUnitId' => 'BizUnitId',
        'devComputeSourceId' => 'DevComputeSourceId',
        'devDescription' => 'DevDescription',
        'devStreamComputeSourceId' => 'DevStreamComputeSourceId',
        'displayName' => 'DisplayName',
        'id' => 'Id',
        'name' => 'Name',
        'nameSpaceTag' => 'NameSpaceTag',
        'prodComputeSourceId' => 'ProdComputeSourceId',
        'prodDescription' => 'ProdDescription',
        'prodStreamComputeSourceId' => 'ProdStreamComputeSourceId',
        'whiteLists' => 'WhiteLists',
    ];

    public function validate()
    {
        if (\is_array($this->whiteLists)) {
            Model::validateArray($this->whiteLists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->devComputeSourceId) {
            $res['DevComputeSourceId'] = $this->devComputeSourceId;
        }

        if (null !== $this->devDescription) {
            $res['DevDescription'] = $this->devDescription;
        }

        if (null !== $this->devStreamComputeSourceId) {
            $res['DevStreamComputeSourceId'] = $this->devStreamComputeSourceId;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nameSpaceTag) {
            $res['NameSpaceTag'] = $this->nameSpaceTag;
        }

        if (null !== $this->prodComputeSourceId) {
            $res['ProdComputeSourceId'] = $this->prodComputeSourceId;
        }

        if (null !== $this->prodDescription) {
            $res['ProdDescription'] = $this->prodDescription;
        }

        if (null !== $this->prodStreamComputeSourceId) {
            $res['ProdStreamComputeSourceId'] = $this->prodStreamComputeSourceId;
        }

        if (null !== $this->whiteLists) {
            if (\is_array($this->whiteLists)) {
                $res['WhiteLists'] = [];
                $n1 = 0;
                foreach ($this->whiteLists as $item1) {
                    $res['WhiteLists'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['DevComputeSourceId'])) {
            $model->devComputeSourceId = $map['DevComputeSourceId'];
        }

        if (isset($map['DevDescription'])) {
            $model->devDescription = $map['DevDescription'];
        }

        if (isset($map['DevStreamComputeSourceId'])) {
            $model->devStreamComputeSourceId = $map['DevStreamComputeSourceId'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NameSpaceTag'])) {
            $model->nameSpaceTag = $map['NameSpaceTag'];
        }

        if (isset($map['ProdComputeSourceId'])) {
            $model->prodComputeSourceId = $map['ProdComputeSourceId'];
        }

        if (isset($map['ProdDescription'])) {
            $model->prodDescription = $map['ProdDescription'];
        }

        if (isset($map['ProdStreamComputeSourceId'])) {
            $model->prodStreamComputeSourceId = $map['ProdStreamComputeSourceId'];
        }

        if (isset($map['WhiteLists'])) {
            if (!empty($map['WhiteLists'])) {
                $model->whiteLists = [];
                $n1 = 0;
                foreach ($map['WhiteLists'] as $item1) {
                    $model->whiteLists[$n1] = whiteLists::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
