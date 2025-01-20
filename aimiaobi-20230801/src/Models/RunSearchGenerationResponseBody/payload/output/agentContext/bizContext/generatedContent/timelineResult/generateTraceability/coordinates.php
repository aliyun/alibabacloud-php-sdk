<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\generateTraceability;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\generateTraceability\coordinates\generateCoordinate;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\generateTraceability\coordinates\newsCoordinate;

class coordinates extends Model
{
    /**
     * @var generateCoordinate
     */
    public $generateCoordinate;
    /**
     * @var newsCoordinate
     */
    public $newsCoordinate;
    protected $_name = [
        'generateCoordinate' => 'GenerateCoordinate',
        'newsCoordinate'     => 'NewsCoordinate',
    ];

    public function validate()
    {
        if (null !== $this->generateCoordinate) {
            $this->generateCoordinate->validate();
        }
        if (null !== $this->newsCoordinate) {
            $this->newsCoordinate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->generateCoordinate) {
            $res['GenerateCoordinate'] = null !== $this->generateCoordinate ? $this->generateCoordinate->toArray($noStream) : $this->generateCoordinate;
        }

        if (null !== $this->newsCoordinate) {
            $res['NewsCoordinate'] = null !== $this->newsCoordinate ? $this->newsCoordinate->toArray($noStream) : $this->newsCoordinate;
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
        if (isset($map['GenerateCoordinate'])) {
            $model->generateCoordinate = generateCoordinate::fromMap($map['GenerateCoordinate']);
        }

        if (isset($map['NewsCoordinate'])) {
            $model->newsCoordinate = newsCoordinate::fromMap($map['NewsCoordinate']);
        }

        return $model;
    }
}
