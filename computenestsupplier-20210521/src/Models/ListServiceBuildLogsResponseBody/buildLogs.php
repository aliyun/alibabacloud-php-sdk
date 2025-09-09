<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceBuildLogsResponseBody;

use AlibabaCloud\Dara\Model;

class buildLogs extends Model
{
    /**
     * @var string
     */
    public $buildStep;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'buildStep' => 'BuildStep',
        'content' => 'Content',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildStep) {
            $res['BuildStep'] = $this->buildStep;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['BuildStep'])) {
            $model->buildStep = $map['BuildStep'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
