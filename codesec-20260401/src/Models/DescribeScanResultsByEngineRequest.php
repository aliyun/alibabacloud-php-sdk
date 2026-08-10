<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models;

use AlibabaCloud\Dara\Model;

class DescribeScanResultsByEngineRequest extends Model
{
    /**
     * @var string
     */
    public $baselineState;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $packageName;
    protected $_name = [
        'baselineState' => 'baselineState',
        'lang' => 'lang',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'packageName' => 'packageName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baselineState) {
            $res['baselineState'] = $this->baselineState;
        }

        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->packageName) {
            $res['packageName'] = $this->packageName;
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
        if (isset($map['baselineState'])) {
            $model->baselineState = $map['baselineState'];
        }

        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['packageName'])) {
            $model->packageName = $map['packageName'];
        }

        return $model;
    }
}
