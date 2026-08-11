<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class ListModelsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $capabilitiesShrink;

    /**
     * @var int
     */
    public $contextWindow;

    /**
     * @var string
     */
    public $featuresShrink;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $providersShrink;
    protected $_name = [
        'capabilitiesShrink' => 'capabilities',
        'contextWindow' => 'contextWindow',
        'featuresShrink' => 'features',
        'language' => 'language',
        'maxResults' => 'maxResults',
        'model' => 'model',
        'name' => 'name',
        'nextToken' => 'nextToken',
        'providersShrink' => 'providers',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capabilitiesShrink) {
            $res['capabilities'] = $this->capabilitiesShrink;
        }

        if (null !== $this->contextWindow) {
            $res['contextWindow'] = $this->contextWindow;
        }

        if (null !== $this->featuresShrink) {
            $res['features'] = $this->featuresShrink;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->providersShrink) {
            $res['providers'] = $this->providersShrink;
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
        if (isset($map['capabilities'])) {
            $model->capabilitiesShrink = $map['capabilities'];
        }

        if (isset($map['contextWindow'])) {
            $model->contextWindow = $map['contextWindow'];
        }

        if (isset($map['features'])) {
            $model->featuresShrink = $map['features'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['providers'])) {
            $model->providersShrink = $map['providers'];
        }

        return $model;
    }
}
