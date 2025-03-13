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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class UpdateGeneratedContentShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 正文
     *
     * @var string
     */
    public $content;

    /**
     * @example 正文
     *
     * @var string
     */
    public $contentText;

    /**
     * @description This parameter is required.
     *
     * @example 36
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $keywordsShrink;

    /**
     * @example 创作xx文章
     *
     * @var string
     */
    public $prompt;

    /**
     * @example 评论类文章
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'content' => 'Content',
        'contentText' => 'ContentText',
        'id' => 'Id',
        'keywordsShrink' => 'Keywords',
        'prompt' => 'Prompt',
        'title' => 'Title',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->contentText) {
            $res['ContentText'] = $this->contentText;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->keywordsShrink) {
            $res['Keywords'] = $this->keywordsShrink;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGeneratedContentShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentText'])) {
            $model->contentText = $map['ContentText'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Keywords'])) {
            $model->keywordsShrink = $map['Keywords'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
