<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpMarketItemsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ItemsI18nValue;

class items extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $displayMetadata;

    /**
     * @var ItemsI18nValue[]
     */
    public $i18n;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var int
     */
    public $installCount;

    /**
     * @var string
     */
    public $marketItemId;

    /**
     * @var string
     */
    public $mcpType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $officialTag;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $readme;

    /**
     * @var string
     */
    public $schemaVersion;

    /**
     * @var string
     */
    public $templateInputSchema;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'category' => 'category',
        'description' => 'description',
        'displayMetadata' => 'displayMetadata',
        'i18n' => 'i18n',
        'iconUrl' => 'iconUrl',
        'installCount' => 'installCount',
        'marketItemId' => 'marketItemId',
        'mcpType' => 'mcpType',
        'name' => 'name',
        'officialTag' => 'officialTag',
        'protocol' => 'protocol',
        'readme' => 'readme',
        'schemaVersion' => 'schemaVersion',
        'templateInputSchema' => 'templateInputSchema',
        'templateVersion' => 'templateVersion',
    ];

    public function validate()
    {
        if (\is_array($this->displayMetadata)) {
            Model::validateArray($this->displayMetadata);
        }
        if (\is_array($this->i18n)) {
            Model::validateArray($this->i18n);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->displayMetadata) {
            if (\is_array($this->displayMetadata)) {
                $res['displayMetadata'] = [];
                foreach ($this->displayMetadata as $key1 => $value1) {
                    $res['displayMetadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->i18n) {
            if (\is_array($this->i18n)) {
                $res['i18n'] = [];
                foreach ($this->i18n as $key1 => $value1) {
                    $res['i18n'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->iconUrl) {
            $res['iconUrl'] = $this->iconUrl;
        }

        if (null !== $this->installCount) {
            $res['installCount'] = $this->installCount;
        }

        if (null !== $this->marketItemId) {
            $res['marketItemId'] = $this->marketItemId;
        }

        if (null !== $this->mcpType) {
            $res['mcpType'] = $this->mcpType;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->officialTag) {
            $res['officialTag'] = $this->officialTag;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->readme) {
            $res['readme'] = $this->readme;
        }

        if (null !== $this->schemaVersion) {
            $res['schemaVersion'] = $this->schemaVersion;
        }

        if (null !== $this->templateInputSchema) {
            $res['templateInputSchema'] = $this->templateInputSchema;
        }

        if (null !== $this->templateVersion) {
            $res['templateVersion'] = $this->templateVersion;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['displayMetadata'])) {
            if (!empty($map['displayMetadata'])) {
                $model->displayMetadata = [];
                foreach ($map['displayMetadata'] as $key1 => $value1) {
                    $model->displayMetadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['i18n'])) {
            if (!empty($map['i18n'])) {
                $model->i18n = [];
                foreach ($map['i18n'] as $key1 => $value1) {
                    $model->i18n[$key1] = ItemsI18nValue::fromMap($value1);
                }
            }
        }

        if (isset($map['iconUrl'])) {
            $model->iconUrl = $map['iconUrl'];
        }

        if (isset($map['installCount'])) {
            $model->installCount = $map['installCount'];
        }

        if (isset($map['marketItemId'])) {
            $model->marketItemId = $map['marketItemId'];
        }

        if (isset($map['mcpType'])) {
            $model->mcpType = $map['mcpType'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['officialTag'])) {
            $model->officialTag = $map['officialTag'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['readme'])) {
            $model->readme = $map['readme'];
        }

        if (isset($map['schemaVersion'])) {
            $model->schemaVersion = $map['schemaVersion'];
        }

        if (isset($map['templateInputSchema'])) {
            $model->templateInputSchema = $map['templateInputSchema'];
        }

        if (isset($map['templateVersion'])) {
            $model->templateVersion = $map['templateVersion'];
        }

        return $model;
    }
}
