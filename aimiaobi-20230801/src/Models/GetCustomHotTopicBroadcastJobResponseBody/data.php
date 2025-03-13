<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCustomHotTopicBroadcastJobResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example 热点话题版本号标识
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'hotTopicVersion' => 'HotTopicVersion',
        'status' => 'Status',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->hotTopicVersion) {
            $res['HotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['HotTopicVersion'])) {
            $model->hotTopicVersion = $map['HotTopicVersion'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
