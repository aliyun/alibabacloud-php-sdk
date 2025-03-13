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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\videoSearchResult\searchResult;

use AlibabaCloud\Tea\Model;

class clipInfos extends Model
{
    /**
     * @example 1
     *
     * @var float
     */
    public $from;

    /**
     * @example 0.8
     *
     * @var float
     */
    public $score;

    /**
     * @example xx
     *
     * @var string
     */
    public $text;

    /**
     * @example 1
     *
     * @var float
     */
    public $to;

    /**
     * @example asr
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'from' => 'From',
        'score' => 'Score',
        'text' => 'Text',
        'to' => 'To',
        'type' => 'Type',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clipInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
