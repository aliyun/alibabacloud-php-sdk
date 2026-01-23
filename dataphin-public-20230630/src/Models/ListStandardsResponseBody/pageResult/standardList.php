<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult\standardList\attributeWithValueList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult\standardList\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult\standardList\effectiveTimeConfig;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult\standardList\lastModifier;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult\standardList\owner;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult\standardList\standardSet;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsResponseBody\pageResult\standardList\standardTemplate;

class standardList extends Model
{
    /**
     * @var attributeWithValueList[]
     */
    public $attributeWithValueList;

    /**
     * @var string
     */
    public $code;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var effectiveTimeConfig
     */
    public $effectiveTimeConfig;

    /**
     * @var string
     */
    public $englishName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var lastModifier
     */
    public $lastModifier;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var owner
     */
    public $owner;

    /**
     * @var string
     */
    public $stage;

    /**
     * @var standardSet
     */
    public $standardSet;

    /**
     * @var standardTemplate
     */
    public $standardTemplate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'attributeWithValueList' => 'AttributeWithValueList',
        'code' => 'Code',
        'creator' => 'Creator',
        'description' => 'Description',
        'effectiveTimeConfig' => 'EffectiveTimeConfig',
        'englishName' => 'EnglishName',
        'id' => 'Id',
        'lastModifier' => 'LastModifier',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'owner' => 'Owner',
        'stage' => 'Stage',
        'standardSet' => 'StandardSet',
        'standardTemplate' => 'StandardTemplate',
        'status' => 'Status',
        'type' => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->attributeWithValueList)) {
            Model::validateArray($this->attributeWithValueList);
        }
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->effectiveTimeConfig) {
            $this->effectiveTimeConfig->validate();
        }
        if (null !== $this->lastModifier) {
            $this->lastModifier->validate();
        }
        if (null !== $this->owner) {
            $this->owner->validate();
        }
        if (null !== $this->standardSet) {
            $this->standardSet->validate();
        }
        if (null !== $this->standardTemplate) {
            $this->standardTemplate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeWithValueList) {
            if (\is_array($this->attributeWithValueList)) {
                $res['AttributeWithValueList'] = [];
                $n1 = 0;
                foreach ($this->attributeWithValueList as $item1) {
                    $res['AttributeWithValueList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->effectiveTimeConfig) {
            $res['EffectiveTimeConfig'] = null !== $this->effectiveTimeConfig ? $this->effectiveTimeConfig->toArray($noStream) : $this->effectiveTimeConfig;
        }

        if (null !== $this->englishName) {
            $res['EnglishName'] = $this->englishName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastModifier) {
            $res['LastModifier'] = null !== $this->lastModifier ? $this->lastModifier->toArray($noStream) : $this->lastModifier;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toArray($noStream) : $this->owner;
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        if (null !== $this->standardSet) {
            $res['StandardSet'] = null !== $this->standardSet ? $this->standardSet->toArray($noStream) : $this->standardSet;
        }

        if (null !== $this->standardTemplate) {
            $res['StandardTemplate'] = null !== $this->standardTemplate ? $this->standardTemplate->toArray($noStream) : $this->standardTemplate;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AttributeWithValueList'])) {
            if (!empty($map['AttributeWithValueList'])) {
                $model->attributeWithValueList = [];
                $n1 = 0;
                foreach ($map['AttributeWithValueList'] as $item1) {
                    $model->attributeWithValueList[$n1] = attributeWithValueList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EffectiveTimeConfig'])) {
            $model->effectiveTimeConfig = effectiveTimeConfig::fromMap($map['EffectiveTimeConfig']);
        }

        if (isset($map['EnglishName'])) {
            $model->englishName = $map['EnglishName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastModifier'])) {
            $model->lastModifier = lastModifier::fromMap($map['LastModifier']);
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Owner'])) {
            $model->owner = owner::fromMap($map['Owner']);
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        if (isset($map['StandardSet'])) {
            $model->standardSet = standardSet::fromMap($map['StandardSet']);
        }

        if (isset($map['StandardTemplate'])) {
            $model->standardTemplate = standardTemplate::fromMap($map['StandardTemplate']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
