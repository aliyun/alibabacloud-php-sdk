<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\generateTraceability;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\generateTraceability\coordinates\generateCoordinate;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\generateTraceability\coordinates\newsCoordinate;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateCoordinate) {
            $res['GenerateCoordinate'] = null !== $this->generateCoordinate ? $this->generateCoordinate->toMap() : null;
        }
        if (null !== $this->newsCoordinate) {
            $res['NewsCoordinate'] = null !== $this->newsCoordinate ? $this->newsCoordinate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return coordinates
     */
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
