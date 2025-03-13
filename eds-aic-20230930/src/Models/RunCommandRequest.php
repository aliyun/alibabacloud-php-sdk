<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RunCommandRequest extends Model
{
    /**
     * @description The content of the command.
     *
     * @example ls
     *
     * @var string
     */
    public $commandContent;

    /**
     * @description The encoding method of the command content (`CommandContent`). The value is not case-sensitive.
     *
     * Valid values:
     *
     *   Base64: encodes the command content in Base64.
     *   PlainText (default): does not encode the command content. The command content is input as plain text.
     *
     * @example PlainText
     *
     * @var string
     */
    public $contentEncoding;

    /**
     * @description The IDs of the cloud phone instances. You can specify a maximum of 50 cloud phone instances.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The timeout period of the command execution. If the command execution exceeds the timeout period, it will be considered timed out. If you leave this parameter empty, it defaults to 60.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'commandContent'  => 'CommandContent',
        'contentEncoding' => 'ContentEncoding',
        'instanceIds'     => 'InstanceIds',
        'timeout'         => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commandContent) {
            $res['CommandContent'] = $this->commandContent;
        }
        if (null !== $this->contentEncoding) {
            $res['ContentEncoding'] = $this->contentEncoding;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommandContent'])) {
            $model->commandContent = $map['CommandContent'];
        }
        if (isset($map['ContentEncoding'])) {
            $model->contentEncoding = $map['ContentEncoding'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
