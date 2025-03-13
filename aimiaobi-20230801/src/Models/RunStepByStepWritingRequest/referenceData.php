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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest\referenceData\articles;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest\referenceData\outlines;
use AlibabaCloud\Tea\Model;

class referenceData extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @var string[]
     */
    public $miniDoc;

    /**
     * @var outlines[]
     */
    public $outlines;

    /**
     * @var string[]
     */
    public $summarization;
    protected $_name = [
        'articles' => 'Articles',
        'miniDoc' => 'MiniDoc',
        'outlines' => 'Outlines',
        'summarization' => 'Summarization',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->articles) {
            $res['Articles'] = [];
            if (null !== $this->articles && \is_array($this->articles)) {
                $n = 0;
                foreach ($this->articles as $item) {
                    $res['Articles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->miniDoc) {
            $res['MiniDoc'] = $this->miniDoc;
        }
        if (null !== $this->outlines) {
            $res['Outlines'] = [];
            if (null !== $this->outlines && \is_array($this->outlines)) {
                $n = 0;
                foreach ($this->outlines as $item) {
                    $res['Outlines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->summarization) {
            $res['Summarization'] = $this->summarization;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return referenceData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n = 0;
                foreach ($map['Articles'] as $item) {
                    $model->articles[$n++] = null !== $item ? articles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MiniDoc'])) {
            if (!empty($map['MiniDoc'])) {
                $model->miniDoc = $map['MiniDoc'];
            }
        }
        if (isset($map['Outlines'])) {
            if (!empty($map['Outlines'])) {
                $model->outlines = [];
                $n = 0;
                foreach ($map['Outlines'] as $item) {
                    $model->outlines[$n++] = null !== $item ? outlines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Summarization'])) {
            if (!empty($map['Summarization'])) {
                $model->summarization = $map['Summarization'];
            }
        }

        return $model;
    }
}
