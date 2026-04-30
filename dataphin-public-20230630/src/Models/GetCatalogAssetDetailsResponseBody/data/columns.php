<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\columns\associatedEntity;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetCatalogAssetDetailsResponseBody\data\columns\standards;

class columns extends Model
{
    /**
     * @var associatedEntity
     */
    public $associatedEntity;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $classifyName;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var string
     */
    public $levelShortName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $qualityScore;

    /**
     * @var standards[]
     */
    public $standards;
    protected $_name = [
        'associatedEntity' => 'AssociatedEntity',
        'bizType' => 'BizType',
        'classifyName' => 'ClassifyName',
        'dataType' => 'DataType',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'guid' => 'Guid',
        'levelShortName' => 'LevelShortName',
        'name' => 'Name',
        'qualityScore' => 'QualityScore',
        'standards' => 'Standards',
    ];

    public function validate()
    {
        if (null !== $this->associatedEntity) {
            $this->associatedEntity->validate();
        }
        if (\is_array($this->standards)) {
            Model::validateArray($this->standards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedEntity) {
            $res['AssociatedEntity'] = null !== $this->associatedEntity ? $this->associatedEntity->toArray($noStream) : $this->associatedEntity;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->classifyName) {
            $res['ClassifyName'] = $this->classifyName;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->levelShortName) {
            $res['LevelShortName'] = $this->levelShortName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->qualityScore) {
            $res['QualityScore'] = $this->qualityScore;
        }

        if (null !== $this->standards) {
            if (\is_array($this->standards)) {
                $res['Standards'] = [];
                $n1 = 0;
                foreach ($this->standards as $item1) {
                    $res['Standards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssociatedEntity'])) {
            $model->associatedEntity = associatedEntity::fromMap($map['AssociatedEntity']);
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['ClassifyName'])) {
            $model->classifyName = $map['ClassifyName'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['LevelShortName'])) {
            $model->levelShortName = $map['LevelShortName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['QualityScore'])) {
            $model->qualityScore = $map['QualityScore'];
        }

        if (isset($map['Standards'])) {
            if (!empty($map['Standards'])) {
                $model->standards = [];
                $n1 = 0;
                foreach ($map['Standards'] as $item1) {
                    $model->standards[$n1] = standards::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
