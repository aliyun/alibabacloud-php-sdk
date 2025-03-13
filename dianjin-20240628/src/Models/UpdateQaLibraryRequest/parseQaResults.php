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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\UpdateQaLibraryRequest;

use AlibabaCloud\Tea\Model;

class parseQaResults extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $answer;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $question;
    protected $_name = [
        'answer' => 'answer',
        'question' => 'question',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->answer) {
            $res['answer'] = $this->answer;
        }
        if (null !== $this->question) {
            $res['question'] = $this->question;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parseQaResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['answer'])) {
            $model->answer = $map['answer'];
        }
        if (isset($map['question'])) {
            $model->question = $map['question'];
        }

        return $model;
    }
}
