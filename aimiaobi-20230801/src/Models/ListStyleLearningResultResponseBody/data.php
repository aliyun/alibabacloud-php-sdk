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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\ListStyleLearningResultResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example AIGC 生成的内容
     *
     * @var string
     */
    public $aigcResult;

    /**
     * @example 70
     *
     * @var int
     */
    public $id;

    /**
     * @example 用户修订后内容
     *
     * @var string
     */
    public $rewriteResult;

    /**
     * @example 文体风格名称
     *
     * @var string
     */
    public $styleName;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'aigcResult' => 'AigcResult',
        'id' => 'Id',
        'rewriteResult' => 'RewriteResult',
        'styleName' => 'StyleName',
        'taskId' => 'TaskId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aigcResult) {
            $res['AigcResult'] = $this->aigcResult;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->rewriteResult) {
            $res['RewriteResult'] = $this->rewriteResult;
        }
        if (null !== $this->styleName) {
            $res['StyleName'] = $this->styleName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['AigcResult'])) {
            $model->aigcResult = $map['AigcResult'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RewriteResult'])) {
            $model->rewriteResult = $map['RewriteResult'];
        }
        if (isset($map['StyleName'])) {
            $model->styleName = $map['StyleName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
